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
			user_id : -5073645037080034483,
			access_hash : -1586949707513012562,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 31,
			user_id : -5240010664969645037,
		),
	),
	boost_peer : $client->inputPeerEmpty(),
	currency : 'VdwIGQp3teo2xHNh',
	amount : 7013853799153907712,
	message : $client->textWithEntities(
		text : 'pQV1BKij4AvzgsT9',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 91,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 7,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 6,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 0,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 97,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 3,
				language : 'vFeIWTQipsMVdHG9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : 5188590438479140688,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 48,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 30,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 95,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 11,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 79,
				document_id : 4394114282631993037,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 90,
			),
		),
	),
);
```