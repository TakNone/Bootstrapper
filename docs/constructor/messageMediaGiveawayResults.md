# messageMediaGiveawayResults

**Description** : *A giveaway with public winners has finished, this constructor contains info about the winners*

**Layer** : 218

```tl
messageMediaGiveawayResults#ceaa3ea1 flags:# only_new_subscribers:flags.0?true refunded:flags.2?true channel_id:long additional_peers_count:flags.3?int launch_msg_id:int winners_count:int unclaimed_count:int winners:Vector<long> months:flags.4?int stars:flags.5?long prize_description:flags.1?string until_date:int = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **only_new_subscribers** | [`flags.0?true`](type/true) | If set, only new subscribers starting from the giveaway creation date participated in the giveaway |
| **refunded** | [`flags.2?true`](type/true) | If set, the giveaway was canceled and was fully refunded |
| <mark>channel_id</mark> | [`long`](type/long) | ID of the channel/supergroup that was automatically boosted by the winners of the giveaway for duration of the Premium subscription |
| **additional_peers_count** | [`flags.3?int`](type/int) | Number of other channels that participated in the giveaway |
| <mark>launch_msg_id</mark> | [`int`](type/int) | Identifier of the message with the giveaway in channel_id |
| <mark>winners_count</mark> | [`int`](type/int) | Total number of winners in the giveaway |
| <mark>unclaimed_count</mark> | [`int`](type/int) | Number of not-yet-claimed prizes |
| <mark>winners</mark> | [`Vector<long>`](type/long) | Up to 100 user identifiers of the winners of the giveaway |
| **months** | [`flags.4?int`](type/int) | Duration in months of each Telegram Premium subscription in the giveaway |
| **stars** | [`flags.5?long`](type/long) | For Telegram Star giveaways, the total number of Telegram Stars being given away |
| **prize_description** | [`flags.1?string`](type/string) | Can contain a textual description of additional giveaway prizes |
| <mark>until_date</mark> | [`int`](type/int) | Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in initial parameters of the giveaway |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaGiveawayResults(
	only_new_subscribers : true,
	refunded : true,
	channel_id : 2339361174095729229,
	additional_peers_count : 18,
	launch_msg_id : 21,
	winners_count : 73,
	unclaimed_count : 76,
	winners : array(4139983005339007464),
	months : 66,
	stars : -391771149472798844,
	prize_description : '7hAUofa5sjuOpVBK',
	until_date : 33,
);
```