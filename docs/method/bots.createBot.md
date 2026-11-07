# bots.createBot

**Description** : *Create a managed bot &raquo; owned by the current user and controlled by the specified manager bot*

**Layer** : 229

```tl
bots.createBot#e5b17f2b flags:# via_deeplink:flags.0?true name:string username:string manager_id:InputUser = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_deeplink** | [`flags.0?true`](type/true) | Set only if the creation prompt was opened from a managed bot creation request deep link » |
| <mark>name</mark> | [`string`](type/string) | Display name of the bot, 1–64 characters |
| <mark>username</mark> | [`string`](type/string) | Username for the bot, as validated by bots.checkUsername |
| <mark>manager_id</mark> | [`InputUser`](type/InputUser) | The manager bot that will control the created bot; must have the user.bot_can_manage_bots flag set |

---

## Result

[User](type/User)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_CREATE_LIMIT_EXCEEDED** | `400` | The current user already owns the maximum allowed number of owned bots, as specified by bots_create_limit_default » and bots_create_limit_premium »; if the current user doesn't have Telegram Premium, upgrading to Premium will allow them to create more bots |
| **MANAGER_INVALID** | `400` | The specified manager bot is invalid |
| **MANAGER_PERMISSION_MISSING** | `400` | The specified manager bot does not have the user.bot_can_manage_bots flag set |
| **NAME_INVALID** | `400` | The specified bot name is invalid |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_OCCUPIED** | `400` | The provided username is already occupied |
| **USERNAME_SUFFIX_MISSING** | `400` | The required bot suffix is missing from the passed username |

---

## Example

```php
$user = $client->bots->createBot(
	via_deeplink : true,
	name : 'BLVMQruJHSX0UCqm',
	username : 'TakNone',
	manager_id : $client->get_input_user(user : '@TakNone'),
);
```