# messageActionGiftCode

**Description** : *Contains a Telegram Premium giftcode link*

**Layer** : 211

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
		user_id : -6209962250055002932,
	),
	months : 26,
	slug : 'UV1rq3A0XLCZKdis',
	currency : '38BpgUkhZlNutoFi',
	amount : -1382406102082794654,
	crypto_currency : 'mR5uLOM0FIVKPDQd',
	crypto_amount : -6946569510159387124,
	message : $client->textWithEntities(
		text : 'zxSkuU7ILZ4Tv90F',
		entities : array(
			$client->messageEntityUnknown(
				offset : 8,
				length : 84,
			),
			$client->messageEntityMention(
				offset : 75,
				length : 34,
			),
			$client->messageEntityHashtag(
				offset : 89,
				length : 25,
			),
			$client->messageEntityBotCommand(
				offset : 1,
				length : 61,
			),
			$client->messageEntityUrl(
				offset : 9,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 54,
				length : 50,
			),
			$client->messageEntityBold(
				offset : 90,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 81,
				length : 72,
			),
			$client->messageEntityCode(
				offset : 70,
				length : 11,
			),
			$client->messageEntityPre(
				offset : 81,
				length : 7,
				language : 'rZ25CV40P89deaJG',
			),
			$client->messageEntityTextUrl(
				offset : 16,
				length : 61,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 77,
				length : 78,
				user_id : 30413968286351140,
			),
			$client->inputMessageEntityMentionName(
				offset : 89,
				length : 2,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 56,
				length : 74,
			),
			$client->messageEntityCashtag(
				offset : 9,
				length : 95,
			),
			$client->messageEntityUnderline(
				offset : 94,
				length : 64,
			),
			$client->messageEntityStrike(
				offset : 19,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 95,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 58,
				length : 88,
			),
			$client->messageEntityCustomEmoji(
				offset : 72,
				length : 14,
				document_id : -4776922169053083444,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 40,
				length : 41,
			),
		),
	),
);
```