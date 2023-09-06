<?php

use Carbon\Carbon;
use App\Models\Setting;

use App\Models\Business;;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

/**
 * Set flash messages
 */
function flash($message, $style = 'info', $link = null)
{
    session()->flash('flash.banner', $message);
    session()->flash('flash.bannerStyle', $style);
    session()->flash('flash.link', $link);
}

/**
 * Get logged in user role
 * @return object
 */
function getRole($user)
{
    return $user && $user->roles ? $user->roles[0] : NULL;
}

/**
 * Get role permissions
 * @return object
 */
function getPermissionsName($role)
{
    return $role->permissions()->pluck('name');
}

/**
 * @param $file
 * @param $directory
 * @param $width
 * @return string
 * save resize image in storage
 */
function saveResizeImage($file, $directory, $width, $height = null, $type = 'jpg')
{
    if (!Storage::exists($directory)) {
        Storage::makeDirectory("$directory");
    }
    $is_preview = strpos($directory, 'previews') !== false;
    $filename = Str::random() . time() . '.' . $type;
    $path = "$directory/$filename";
    $img = Image::make($file)->orientate()->encode($type, 80)->resize($width, $height, function ($constraint) use ($height) {
        if (!$height) {
            $constraint->aspectRatio();
        }
        // $constraint->upsize();
    });
    $resource = $img->stream()->detach();
    Storage::disk('public')->put($path, $resource, 'public');
    return $path;
}

/**
 * @param $file
 * delete a file
 */
function deleteFile($path)
{
    if (!empty($path) && file_exists('app/' . $path)) {
        unlink(storage_path('app/' . $path));
    }

    $storage_path = 'storage/' . $path;
    $public_path = public_path($storage_path);
    if (!empty($path) && file_exists($public_path)) {
        unlink($public_path);
    }
}

/**
 * Get Image Url From image.
 */
function getImageUrl($image)
{
    //if you are sending image object then do not send second parameter and if you are sending direct path then send second parameter as true.
    return $image ? asset('storage/' . $image)  : null;
}

/**
 * Get image url.
 */
function getImage($image, $type, $isExternal = false)
{
    if (empty($image)) {
        switch ($type) {
            case 'avatar':
                $placeHolder = url('/images/no_avatar.jpg');
                break;
            case 'logo':
            case 'icon':
            case 'image':
                $placeHolder = url('/images/placeholder.png');
                break;
            case 'banner':
                $placeHolder = url('/image/cover.jpg');
                break;
        }
    } else {
        $imageUrl = $isExternal ? $image : url(Storage::url($image));
    }

    return isset($placeHolder) ? $placeHolder : $imageUrl;
}
