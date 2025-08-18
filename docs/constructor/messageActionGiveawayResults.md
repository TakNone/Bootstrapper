# messageActionGiveawayResults

**Description** : *A giveaway has ended*

**Layer** : 211

```tl
messageActionGiveawayResults#87e2f155 flags:# stars:flags.0?true winners_count:int unclaimed_count:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **stars** | [`flags.0?true`](type/true) | If set, this is a Telegram Star giveaway |
| <mark>winners_count</mark> | [`int`](type/int) | Number of winners in the giveaway |
| <mark>unclaimed_count</mark> | [`int`](type/int) | Number of undistributed prizes |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiveawayResults(
	stars : true,
	winners_count : 27,
	unclaimed_count : 24,
);
```