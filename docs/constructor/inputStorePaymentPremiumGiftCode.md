# inputStorePaymentPremiumGiftCode

**Description** : *Used to gift Telegram Premium subscriptions only to some specific subscribers of a channel/supergroup or to some of our contacts, see here &raquo; for more info on giveaways and gifts*

**Layer** : 218

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
	users : array($client->get_input_user(user : '@TakNone')),
	boost_peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	currency : 'oIP1OJvG0YjSyQxg',
	amount : -5285075386278048615,
	message : $client->textWithEntities(
		text : 'Z0gXQWCkx6dAVima',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 25,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 22,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 2,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 28,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 96,
				language : 'P2E6bSOaJu4AwTsn',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 52,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : -4481444071203996302,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 55,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 37,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 29,
				document_id : -7007854123379368269,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 81,
			),
		),
	),
);
```