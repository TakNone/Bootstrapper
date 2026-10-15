# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 229

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
	currency : '3MJt1kDGwO6iVjye',
	amount : -7662721637865673000,
	message : $client->textWithEntities(
		text : '826evK4FXqwMmty3',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 82,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 86,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 58,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 74,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 75,
				language : 'dbBpDTx2CLWvI7Fo',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 66,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : 4095532063046823814,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 29,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 19,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 40,
				document_id : -789518989456446428,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 64,
				date : 65,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 67,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 18,
				old_text : '597P6NdsweiCjcMa',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 35,
			),
		),
	),
);
```