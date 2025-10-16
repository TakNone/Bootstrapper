# userProfilePhoto

**Description** : *User profile photo*

**Layer** : 216

```tl
userProfilePhoto#82d1f706 flags:# has_video:flags.0?true personal:flags.2?true photo_id:long stripped_thumb:flags.1?bytes dc_id:int = UserProfilePhoto;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_video** | [`flags.0?true`](type/true) | Whether an animated profile picture is available for this user |
| **personal** | [`flags.2?true`](type/true) | Whether this profile photo is only visible to us (i.e. it was set using photos.uploadContactProfilePhoto) |
| <mark>photo_id</mark> | [`long`](type/long) | Identifier of the respective photo |
| **stripped_thumb** | [`flags.1?bytes`](type/bytes) | Stripped thumbnail |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID where the photo is stored |

---

## Type

[UserProfilePhoto](type/UserProfilePhoto)

---

## Example

```php
$userProfilePhoto = $client->userProfilePhoto(
	has_video : true,
	personal : true,
	photo_id : -8863266707146414082,
	stripped_thumb : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	dc_id : 75,
);
```