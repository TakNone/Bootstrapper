# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 222

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
	currency : 'neazLtrTSIEbqg0Q',
	amount : -4933937084796813964,
	message : $client->textWithEntities(
		text : 'phYq8wjnl3IUJSZ5',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 18,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 95,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 47,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 81,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 47,
				language : '2Xi1VPoYp6ba40SU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 93,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : 184376264601839237,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 69,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 58,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 75,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : -7145921967358496284,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 25,
			),
		),
	),
);
```