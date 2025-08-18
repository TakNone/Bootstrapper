# bots.setBotCommands

**Description** : *Set bot command list*

**Layer** : 211

```tl
bots.setBotCommands#517165a scope:BotCommandScope lang_code:string commands:Vector<BotCommand> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>scope</mark> | [`BotCommandScope`](type/BotCommandScope) | Command scope |
| <mark>lang_code</mark> | [`string`](type/string) | Language code |
| <mark>commands</mark> | [`Vector<BotCommand>`](type/BotCommand) | Bot commands |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_COMMAND_DESCRIPTION_INVALID** | `400` | The specified command description is invalid |
| **BOT_COMMAND_INVALID** | `400` | The specified command is invalid |
| **LANG_CODE_INVALID** | `400` | The specified language code is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USER_BOT_REQUIRED** | `400` | This method can only be called by a bot |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->bots->setBotCommands(
	scope : $client->botCommandScopeDefault(),
	lang_code : 'ePKXytvB6ZLkmz9c',
	commands : array(
		$client->botCommand(
			command : 'XgMJzfdFZu0eSyPi',
			description : '9L2jy7sdqNP8Xbfi',
		),
	),
);
```