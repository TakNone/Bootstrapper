# bots.toggleUsername

**Description** : *Activate or deactivate a purchased fragment.com username associated to a bot we own*

**Layer** : 211

```tl
bots.toggleUsername#53ca973 bot:InputUser username:string active:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot |
| <mark>username</mark> | [`string`](type/string) | Username |
| <mark>active</mark> | [`Bool`](type/Bool) | Whether to activate or deactivate it |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |
| **USERNAME_NOT_MODIFIED** | `400` | The username was not modified |

---

## Example

```php
$bool = $client->bots->toggleUsername(
	bot : $client->inputUserEmpty(),
	username : 'TakNone',
	active : $client->boolFalse(),
);
```