# inputBusinessBotRecipients

**Description** : *Specifies the private chats that a connected business bot &raquo; may interact with*

**Layer** : 214

```tl
inputBusinessBotRecipients#c4e5921e flags:# existing_chats:flags.0?true new_chats:flags.1?true contacts:flags.2?true non_contacts:flags.3?true exclude_selected:flags.5?true users:flags.4?Vector<InputUser> exclude_users:flags.6?Vector<InputUser> = InputBusinessBotRecipients;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **existing_chats** | [`flags.0?true`](type/true) | Selects all existing private chats |
| **new_chats** | [`flags.1?true`](type/true) | Selects all new private chats |
| **contacts** | [`flags.2?true`](type/true) | Selects all private chats with contacts |
| **non_contacts** | [`flags.3?true`](type/true) | Selects all private chats with non-contacts |
| **exclude_selected** | [`flags.5?true`](type/true) | If set, then all private chats except the ones selected by existing_chats, new_chats, contacts, non_contacts and users are chosen. Note that if this flag is set, any values passed in exclude_users will be merged and moved into users by the server |
| **users** | [`flags.4?Vector<InputUser>`](type/InputUser) | Explicitly selected private chats |
| **exclude_users** | [`flags.6?Vector<InputUser>`](type/InputUser) | Identifiers of private chats that are always excluded |

---

## Type

[InputBusinessBotRecipients](type/InputBusinessBotRecipients)

---

## Example

```php
$inputBusinessBotRecipients = $client->inputBusinessBotRecipients(
	existing_chats : true,
	new_chats : true,
	contacts : true,
	non_contacts : true,
	exclude_selected : true,
	users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : -4619327890573334951,
			access_hash : 8927086034333958020,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 38,
			user_id : 1130503981090915689,
		),
	),
	exclude_users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : 8312245927612999172,
			access_hash : 858881206808227463,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 29,
			user_id : -7413192657783954503,
		),
	),
);
```