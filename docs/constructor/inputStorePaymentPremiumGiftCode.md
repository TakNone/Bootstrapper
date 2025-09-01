# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 214

```tl
inputStorePaymentPremiumGiftCode#fb790393 flags:# users:Vector<InputUser> boost_peer:flags.0?InputPeer currency:string amount:long message:flags.1?TextWithEntities = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>users</mark> | [`Vector<InputUser>`](type/InputUser) | The users that will receive the Telegram Premium subscriptions |
| **boost_peer** | [`flags.0?InputPeer`](type/InputPeer) | If set, the gifts will be sent on behalf of a channel/supergroup we are an admin of, which will also assign some boosts to it. Otherwise, the gift will be sent directly from the currently logged in user, and we will gain some extra boost slots. See here » for more info on giveaways and gifts |
| <mark>currency</mark> | [`string`](type/string) | Three-letter ISO 4217 currency code |
| <mark>amount</mark> | [`long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[InputStorePaymentPurpose](type/InputStorePaymentPurpose)

---

## Example

```php
$inputStorePaymentPurpose = $client->inputStorePaymentPremiumGiftCode(
	users : array(
		$client->inputUserEmpty(),
		$client->inputUserSelf(),
		$client->inputUser(
			user_id : -5165535385820956010,
			access_hash : 7332000673160452781,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 47,
			user_id : -403404495778054873,
		),
	),
	boost_peer : $client->inputPeerEmpty(),
	currency : 'l3X8QO6PTIKgcrwL',
	amount : -3389746714780720383,
	message : $client->textWithEntities(
		text : 'V4CE5cvR6hAtuezi',
		entities : array(
			$client->messageEntityUnknown(
				offset : 78,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 34,
				length : 93,
			),
			$client->messageEntityHashtag(
				offset : 78,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 76,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 5,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 25,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 33,
				length : 43,
			),
			$client->messageEntityItalic(
				offset : 5,
				length : 78,
			),
			$client->messageEntityCode(
				offset : 97,
				length : 38,
			),
			$client->messageEntityPre(
				offset : 79,
				length : 54,
				language : 'LptDGdYgA8lq5wjR',
			),
			$client->messageEntityTextUrl(
				offset : 2,
				length : 77,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 90,
				length : 50,
				user_id : 8656238303164210811,
			),
			$client->inputMessageEntityMentionName(
				offset : 90,
				length : 92,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 4,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 67,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 85,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 28,
				length : 30,
			),
			$client->messageEntityBankCard(
				offset : 75,
				length : 88,
			),
			$client->messageEntitySpoiler(
				offset : 32,
				length : 31,
			),
			$client->messageEntityCustomEmoji(
				offset : 21,
				length : 43,
				document_id : 393234046244498698,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 25,
				length : 11,
			),
		),
	),
);
```