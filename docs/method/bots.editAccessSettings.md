# bots.editAccessSettings

**Description** : *Edit the access restriction settings &raquo; of a managed bot; can only be called by the manager bot*

**Layer** : 233

```tl
bots.editAccessSettings#31813cd8 flags:# restricted:flags.0?true bot:InputUser add_users:flags.1?Vector<InputUser> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **restricted** | [`flags.0?true`](type/true) | If set, restricts access to the managed bot to only the owner and the users in add_users |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The managed bot whose access settings to edit |
| **add_users** | [`flags.1?Vector<InputUser>`](type/InputUser) | Additional users (max 10, excluding the owner) allowed to access the managed bot when restricted is set |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$bool = $client->bots->editAccessSettings(
	restricted : true,
	bot : $client->get_input_user(user : '@TakNone'),
	add_users : array($client->get_input_user(user : '@TakNone')),
);
```