# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here » for more info on giveaways and gifts*

**Layer** : 211

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
			user_id : 6684772398280934696,
			access_hash : -8318252495605261574,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 55,
			user_id : -3036538683215539739,
		),
	),
	boost_peer : $client->inputPeerEmpty(),
	currency : 'qlE9vWUyjb47gHFz',
	amount : 8003895320243863114,
	message : $client->textWithEntities(
		text : 'vaxMuwTWYg12oqAz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 70,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 14,
				length : 88,
			),
			$client->messageEntityHashtag(
				offset : 30,
				length : 88,
			),
			$client->messageEntityBotCommand(
				offset : 34,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 55,
				length : 83,
			),
			$client->messageEntityEmail(
				offset : 100,
				length : 88,
			),
			$client->messageEntityBold(
				offset : 49,
				length : 53,
			),
			$client->messageEntityItalic(
				offset : 86,
				length : 58,
			),
			$client->messageEntityCode(
				offset : 95,
				length : 41,
			),
			$client->messageEntityPre(
				offset : 55,
				length : 33,
				language : 'qoUiy5muIxscSeVr',
			),
			$client->messageEntityTextUrl(
				offset : 57,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 74,
				length : 90,
				user_id : -5125250099506589865,
			),
			$client->inputMessageEntityMentionName(
				offset : 79,
				length : 98,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 44,
				length : 53,
			),
			$client->messageEntityCashtag(
				offset : 75,
				length : 9,
			),
			$client->messageEntityUnderline(
				offset : 19,
				length : 14,
			),
			$client->messageEntityStrike(
				offset : 88,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 5,
				length : 58,
			),
			$client->messageEntitySpoiler(
				offset : 80,
				length : 19,
			),
			$client->messageEntityCustomEmoji(
				offset : 59,
				length : 32,
				document_id : 5665622575283890608,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 26,
				length : 57,
			),
		),
	),
);
```