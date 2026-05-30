# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 225

```tl
inputStorePaymentPremiumGiftCode#fb790393 flags:# users:Vector<InputUser> boost_peer:flags.0?InputPeer currency:string amount:long message:flags.1?TextWithEntities = InputStorePaymentPurpose;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	users : array($client->get_input_user(user : '@TakNone')),
	boost_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	currency : 'Ko230dzpcXa1vEAN',
	amount : -4832749203552095911,
	message : $client->textWithEntities(
		text : '5HymceFpJIXux3b9',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 21,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 37,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 98,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 90,
				language : '5doqIrhFj1cmvMXg',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : 4937039315314747494,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 93,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 21,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 23,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : -6181871044583589737,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 54,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 36,
				date : 94,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 97,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 35,
				old_text : 'fJpU8y2GHQmYtzWX',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 5,
			),
		),
	),
);
```