# messageActionGiftCode

**Description** : *Contains a Telegram Premium giftcode link*

**Layer** : 216

```tl
messageActionGiftCode#56d03994 flags:# via_giveaway:flags.0?true unclaimed:flags.5?true boost_peer:flags.1?Peer months:int slug:string currency:flags.2?string amount:flags.2?long crypto_currency:flags.3?string crypto_amount:flags.3?long message:flags.4?TextWithEntities = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **via_giveaway** | [`flags.0?true`](type/true) | If set, this gift code was received from a giveaway » started by a channel/supergroup we're subscribed to |
| **unclaimed** | [`flags.5?true`](type/true) | If set, the link was not redeemed yet |
| **boost_peer** | [`flags.1?Peer`](type/Peer) | Identifier of the channel/supergroup that created the gift code either directly or through a giveaway: if we import this giftcode link, we will also automatically boost this channel/supergroup |
| <mark>months</mark> | [`int`](type/int) | Duration in months of the gifted Telegram Premium subscription |
| <mark>slug</mark> | [`string`](type/string) | Slug of the Telegram Premium giftcode link |
| **currency** | [`flags.2?string`](type/string) | Three-letter ISO 4217 currency code |
| **amount** | [`flags.2?long`](type/long) | Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies) |
| **crypto_currency** | [`flags.3?string`](type/string) | If set, the gift was made using the specified cryptocurrency |
| **crypto_amount** | [`flags.3?long`](type/long) | If crypto_currency is set, contains the paid amount, in the smallest units of the cryptocurrency |
| **message** | [`flags.4?TextWithEntities`](type/TextWithEntities) | Message attached with the gift |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiftCode(
	via_giveaway : true,
	unclaimed : true,
	boost_peer : $client->peerUser(
		user_id : 5706584274118752861,
	),
	months : 82,
	slug : 'eBt2Fwxi18Qu7anM',
	currency : 'yWV4qx9Abr7TlaZC',
	amount : -3209768665189841613,
	crypto_currency : 'c7KsTUiH60G4NIWg',
	crypto_amount : 261973123623253758,
	message : $client->textWithEntities(
		text : 'pRNdyELDlvPsKh2r',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 33,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 84,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 30,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 45,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 12,
				language : 'xGzYKEZ2hoF184XL',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 60,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : -9150508004942509492,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 77,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 45,
				document_id : -4178162182651854311,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 86,
			),
		),
	),
);
```