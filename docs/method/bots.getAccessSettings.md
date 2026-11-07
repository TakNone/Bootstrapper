# bots.getAccessSettings

**Description** : *Get the access restriction settings &raquo; of a managed bot; can only be called by the manager bot*

**Layer** : 229

```tl
bots.getAccessSettings#213853a3 bot:InputUser = bots.AccessSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The managed bot whose access settings to retrieve |

---

## Result

[bots.AccessSettings](type/bots.AccessSettings)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |

---

## Example

```php
$botsAccessSettings = $client->bots->getAccessSettings(
	bot : $client->get_input_user(user : '@TakNone'),
);
```