# inputInvoiceStarGift

**Description** : *Used to buy a Telegram Star Gift, see here &raquo; for more info*

**Layer** : 227

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
	gift_id : 9158857385857994483,
	message : $client->textWithEntities(
		text : 'bP9LrRcFO6lf4SAo',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 77,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 92,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 80,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 40,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 19,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'ARSZ1DcUPFnG5sK3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 56,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 19,
				user_id : -4361416237233576350,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 18,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 6,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 90,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 59,
				document_id : -3349430681076200330,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 1,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 12,
				date : 85,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 76,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 88,
				old_text : 'KvLA132WwUNfml0Q',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 27,
			),
		),
	),
);
```