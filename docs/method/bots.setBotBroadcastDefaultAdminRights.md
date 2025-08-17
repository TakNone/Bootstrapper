# bots.setBotBroadcastDefaultAdminRights

**Description** : *Set the default suggested admin rights for bots being added as admins to channels, see here for more info on how to handle them »*

**Layer** : 211

```tl
bots.setBotBroadcastDefaultAdminRights#788464e1 admin_rights:ChatAdminRights = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>admin_rights</mark> | [`ChatAdminRights`](type/ChatAdminRights) | Admin rights |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **RIGHTS_NOT_MODIFIED** | `400` | The new admin rights are equal to the old rights, no change was made |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->bots->setBotBroadcastDefaultAdminRights(
	admin_rights : $client->chatAdminRights(
		change_info : true,
		post_messages : true,
		edit_messages : true,
		delete_messages : true,
		ban_users : true,
		invite_users : true,
		pin_messages : true,
		add_admins : true,
		anonymous : true,
		manage_call : true,
		other : true,
		manage_topics : true,
		post_stories : true,
		edit_stories : true,
		delete_stories : true,
		manage_direct_messages : true,
	),
);
```