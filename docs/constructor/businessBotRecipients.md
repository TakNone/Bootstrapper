# businessBotRecipients

**Description** : *Specifies the private chats that a connected business bot &raquo; may receive messages and interact with*

**Layer** : 218

```tl
businessBotRecipients#b88cf373 flags:# existing_chats:flags.0?true new_chats:flags.1?true contacts:flags.2?true non_contacts:flags.3?true exclude_selected:flags.5?true users:flags.4?Vector<long> exclude_users:flags.6?Vector<long> = BusinessBotRecipients;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **existing_chats** | [`flags.0?true`](type/true) | Selects all existing private chats |
| **new_chats** | [`flags.1?true`](type/true) | Selects all new private chats |
| **contacts** | [`flags.2?true`](type/true) | Selects all private chats with contacts |
| **non_contacts** | [`flags.3?true`](type/true) | Selects all private chats with non-contacts |
| **exclude_selected** | [`flags.5?true`](type/true) | If set, then all private chats except the ones selected by existing_chats, new_chats, contacts, non_contacts and users are chosen. Note that if this flag is set, any values passed in exclude_users will be merged and moved into users by the server, thus exclude_users will always be empty |
| **users** | [`flags.4?Vector<long>`](type/long) | Explicitly selected private chats |
| **exclude_users** | [`flags.6?Vector<long>`](type/long) | Identifiers of private chats that are always excluded |

---

## Type

[BusinessBotRecipients](type/BusinessBotRecipients)

---

## Example

```php
$businessBotRecipients = $client->businessBotRecipients(
	existing_chats : true,
	new_chats : true,
	contacts : true,
	non_contacts : true,
	exclude_selected : true,
	users : array(-3177827210391854030),
	exclude_users : array(5281060753578353037),
);
```