# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 227

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
	currency : '7Vspj1GMZHeaP9t3',
	amount : -7680922426885698189,
	message : $client->textWithEntities(
		text : 'WdlDSORtn5Ty9LeM',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 13,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 38,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 72,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 54,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 90,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 20,
				language : '2YgicwH9QxKtCGe8',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : -7191655796480764122,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 42,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 87,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 49,
				document_id : 1928420983366644881,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 97,
				date : 35,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 46,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 75,
				old_text : 'IlTySC9ciOV25ohZ',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 69,
			),
		),
	),
);
```