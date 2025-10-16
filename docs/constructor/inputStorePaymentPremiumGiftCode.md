# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 216

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
			user_id : 1230897357152618085,
			access_hash : 5598160103162336595,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 64,
			user_id : 4820597098782884697,
		),
	),
	boost_peer : $client->inputPeerEmpty(),
	currency : '9foKOhr0guyI2bmk',
	amount : -7280583847606604396,
	message : $client->textWithEntities(
		text : '9wtfucGRmAHjaKbi',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 74,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 46,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 85,
				language : 'dpw8KEVXgB652LNU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 86,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : -294691368041589270,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 92,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 81,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 74,
				document_id : 5746057776773514090,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 10,
			),
		),
	),
);
```