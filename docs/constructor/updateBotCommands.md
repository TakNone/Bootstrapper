# updateBotCommands

**Description** : *The command set of a certain bot in a certain chat has changed*

**Layer** : 222

```tl
updateBotCommands#4d712f2e peer:Peer bot_id:long commands:Vector<BotCommand> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The affected chat |
| <mark>bot_id</mark> | [`long`](type/long) | ID of the bot that changed its command set |
| <mark>commands</mark> | [`Vector<BotCommand>`](type/BotCommand) | New bot commands |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotCommands(
	peer : $client->peerUser(
		user_id : 5236017698404180797,
	),
	bot_id : -2864457541234527061,
	commands : array(
		$client->botCommand(
			command : 'GzTmS8iCty0kBvgd',
			description : 'lIbaTByELd7C4KUW',
		),
	),
);
```