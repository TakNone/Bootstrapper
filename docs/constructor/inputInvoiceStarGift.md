# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here &raquo; for more info*

**Layer** : 233

```tl
inputInvoiceStarGift#e8625e92 flags:# hide_name:flags.0?true include_upgrade:flags.2?true peer:InputPeer gift_id:long message:flags.1?TextWithEntities = InputInvoice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **hide_name** | [`flags.0?true`](type/true) | If set, your name will be hidden if the destination user decides to display the gift on their profile (they will still see that you sent the gift) |
| **include_upgrade** | [`flags.2?true`](type/true) | Also pay for an eventual upgrade of the gift to a collectible gift » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Receiver of the gift |
| <mark>gift_id</mark> | [`long`](type/long) | Identifier of the gift, from starGift.id |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Optional message, attached with the gift. The maximum length for this field is specified in the stargifts_message_length_max client configuration value » |

---

## Type

[InputInvoice](type/InputInvoice)

---

## Example

```php
$inputInvoice = $client->inputInvoiceStarGift(
	hide_name : true,
	include_upgrade : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	gift_id : -8796819620969017129,
	message : $client->textWithEntities(
		text : 'zNmxruTOJYEV5qsv',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 88,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 39,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 8,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 99,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 94,
				language : '1fFrCTGBwPyp0t5Y',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 58,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : 3065929731525669182,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 54,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 25,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 19,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 40,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 30,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 92,
				document_id : 2801015940328687926,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 65,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 0,
				date : 91,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 40,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 11,
				old_text : 'mV8teoWgGhauC20H',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 86,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 79,
			),
		),
	),
);
```