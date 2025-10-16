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
			user_id : -6017540197450396525,
			access_hash : 4802273438677653732,
		),
		$client->inputUserFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 63,
			user_id : 5889011995819943403,
		),
	),
	boost_peer : $client->inputPeerEmpty(),
	currency : 'jGYSeAfNb9Tm143w',
	amount : 8601330073604309784,
	message : $client->textWithEntities(
		text : 'JQhSeEyr9akKiAn8',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 1,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 47,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 51,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 29,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 38,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 44,
				language : 'tO3sNrbHZ2v5hgY6',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 67,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : -1915735618349088285,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 53,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 77,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 100,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : -9201256928230029057,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 17,
			),
		),
	),
);
```