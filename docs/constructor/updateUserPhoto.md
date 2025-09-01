# updateUserPhoto

**Description** : *Change of contact&#039;s profile photo*

**Layer** : 214

```tl
updateUserPhoto#f227868c user_id:long date:int photo:UserProfilePhoto previous:Bool = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | User identifier |
| <mark>date</mark> | [`int`](type/int) | Date of photo update |
| <mark>photo</mark> | [`UserProfilePhoto`](type/UserProfilePhoto) | New profile photo |
| <mark>previous</mark> | [`Bool`](type/Bool) | (boolTrue), if one of the previously used photos is set a profile photo |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateUserPhoto(
	user_id : -3674698253579208164,
	date : 56,
	photo : $client->userProfilePhotoEmpty(),
	previous : false,
);
```