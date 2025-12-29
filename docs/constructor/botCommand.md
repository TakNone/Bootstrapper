# botCommand

**Description** : *Describes a bot command that can be used in a chat*

**Layer** : 218

```tl
botCommand#c27ac8c7 command:string description:string = BotCommand;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>command</mark> | [`string`](type/string) | /command name |
| <mark>description</mark> | [`string`](type/string) | Description of the command |

---

## Type

[BotCommand](type/BotCommand)

---

## Example

```php
$botCommand = $client->botCommand(
	command : 'WHTwDzCE1fmQ35uB',
	description : 'X9YWl1BOHNkDaQfg',
);
```