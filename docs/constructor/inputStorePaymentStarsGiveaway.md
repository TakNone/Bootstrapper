# inputStorePaymentStarsGiveaway

**Description** : *Used to pay for a star giveaway, see here &raquo; for more info*

**Layer** : 216

```tl
inputStorePaymentStarsGiveaway#751f08fa flags:# only_new_subscribers:flags.0?true winners_are_visible:flags.3?true stars:long boost_peer:InputPeer additional_peers:flags.1?Vector<InputPeer> countries_iso2:flags.2?Vector<string> prize_description:flags.4?string random_id:long until_date:int currency:string amount:long users:int = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **only_new_subscribers** | [`flags.0?true`](type/true) | If set, only new subscribers starting from the giveaway creation date will be able to participate to the giveaway |
| **winners_are_visible** | [`flags.3?true`](type/true) | If set, giveaway winners are public and will be listed in a messageMediaGiveawayResults message that will be automatically sent to the channel once the giveaway ends |
| <mark>stars</mark> | [`long`](type/long) | Total number of Telegram Stars being given away (each user will receive stars/users stars) |
| <mark>boost_peer</mark> | [`InputPeer`](type/InputPeer) | The channel/supergroup starting the giveaway, that the user must join to participate, that will receive the giveaway boosts; see here » for more info on giveaways |
| **additional_peers** | [`flags.1?Vector<InputPeer>`](type/InputPeer) | Additional channels that the user must join to participate to the giveaway can be specified here |
| **countries_iso2** | [`flags.2?Vector<string>`](type/string) | The set of users that can participate to the giveaway can be restricted by passing here an explicit whitelist of up to giveaway_countries_max countries, specified as two-letter ISO 3166-1 alpha-2 country codes |
| **prize_description** | [`flags.4?string`](type/string) | Can contain a textual description of additional giveaway prizes |
| <mark>random_id</mark> | [`long`](type/long) | Random ID to avoid resending the giveaway |
| <mark>until_date</mark> | [`int`](type/int) | The end date of the giveaway, must be at most giveaway_period_max seconds in the future; see here » for more info on giveaways |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| <mark>users</mark> | [`int`](type/int) | Number of winners |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentStarsGiveaway(
	only_new_subscribers : true,
	winners_are_visible : true,
	stars : 3205534248291268685,
	boost_peer : $client->inputPeerEmpty(),
	additional_peers : array(
		$client->inputPeerEmpty(),
		$client->inputPeerSelf(),
		$client->inputPeerChat(
			chat_id : -4092297806682700347,
		),
		$client->inputPeerUser(
			user_id : -6926154378306522551,
			access_hash : -1525114696327460160,
		),
		$client->inputPeerChannel(
			channel_id : 2907628450120455866,
			access_hash : -645164097036785540,
		),
		$client->inputPeerUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 7,
			user_id : -657058806375800907,
		),
		$client->inputPeerChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 49,
			channel_id : 621879318080051828,
		),
	),
	countries_iso2 : array('jsoBlIkEaW1ZhzXu'),
	prize_description : 'yZDp1QhLE5mwI9b6',
	random_id : 6123658643913206264,
	until_date : 37,
	currency : 'TZsBGLQjkXV5OR80',
	amount : 1507733957834712927,
	users : 76,
);
```