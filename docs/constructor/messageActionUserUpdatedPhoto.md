# messageActionUserUpdatedPhoto

**Layer** : 214

```tl
messageActionUserUpdatedPhoto#55555551 new_user_photo:UserProfilePhoto = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_user_photo</mark> | [`UserProfilePhoto`](type/UserProfilePhoto) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionUserUpdatedPhoto(
	new_user_photo : $client->userProfilePhotoEmpty(),
);
```