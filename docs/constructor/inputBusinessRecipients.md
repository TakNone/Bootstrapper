# inputBusinessRecipients

**Description** : *Specifies the chats that can receive Telegram Business away &raquo; and greeting &raquo; messages*

**Layer** : 211

```tl
inputBusinessRecipients#6f8b32aa flags:# existing_chats:flags.0?true new_chats:flags.1?true contacts:flags.2?true non_contacts:flags.3?true exclude_selected:flags.5?true users:flags.4?Vector<InputUser> = InputBusinessRecipients;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **existing_chats** | [`flags.0?true`](type/true) | All existing private chats |
| **new_chats** | [`flags.1?true`](type/true) | All new private chats |
| **contacts** | [`flags.2?true`](type/true) | All private chats with contacts |
| **non_contacts** | [`flags.3?true`](type/true) | All private chats with non-contacts |
| **exclude_selected** | [`flags.5?true`](type/true) | If set, inverts the selection |
| **users** | [`flags.4?Vector<InputUser>`](type/InputUser) | Only private chats with the specified users |

---

## Type

[InputBusinessRecipients](type/InputBusinessRecipients)

---

## Example

```php
$inputBusinessRecipients = $client->inputBusinessRecipients(
	existing_chats : true,
	new_chats : true,
	contacts : true,
	non_contacts : true,
	exclude_selected : true,
	users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : 2259866394910159128,
			access_hash : 8161912868484342615,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 75,
			user_id : 453025425069843021,
		),
	),
);
```