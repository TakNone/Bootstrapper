# botCommand

**Description** : *Describes a bot command that can be used in a chat*

**Layer** : 233

```tl
botCommand#9852d6d2 flags:# ephemeral:flags.0?true command:string description:string = BotCommand;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **ephemeral** | [`flags.0?true`](type/true) | NOTHING |
| <mark>command</mark> | [`string`](type/string) | /command name |
| <mark>description</mark> | [`string`](type/string) | Description of the command |

---

## Type

[BotCommand](type/BotCommand)

---

## Example

```php
$botCommand = $client->botCommand(
	ephemeral : true,
	command : 'xYS17oWnaFrVkmDG',
	description : 'XOq90Zm3ehYS2bdL',
);
```