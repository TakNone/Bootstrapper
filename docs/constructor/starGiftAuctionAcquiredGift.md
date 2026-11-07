# starGiftAuctionAcquiredGift

**Description** : *Describes a gift that the current user won in an auction*

**Layer** : 229

```tl
starGiftAuctionAcquiredGift#42b00348 flags:# name_hidden:flags.0?true peer:Peer date:int bid_amount:long round:int pos:int message:flags.1?TextWithEntities gift_num:flags.2?int = StarGiftAuctionAcquiredGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **name_hidden** | [`flags.0?true`](type/true) | If set, your name will be hidden if the destination peer decides to display the gift on their profile (they will still see that you sent the gift) |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer that received the gift |
| <mark>date</mark> | [`int`](type/int) | When was the gift obtained |
| <mark>bid_amount</mark> | [`long`](type/long) | The amount in Telegram Stars that was bid in order to obtain the gift |
| <mark>round</mark> | [`int`](type/int) | The round number where the gift was obtained |
| <mark>pos</mark> | [`int`](type/int) | The position of the gift in the auction |
| **message** | [`flags.1?TextWithEntities`](type/TextWithEntities) | Optional message that attached with the gift, passed when making the bid |
| **gift_num** | [`flags.2?int`](type/int) | If set, the collectible number of the won gift among all collectibles of the same type. This field is optional because only auction collectibles won before this field was introduced in the API will not have this flag set |

---

## Type

[StarGiftAuctionAcquiredGift](type/StarGiftAuctionAcquiredGift)

---

## Example

```php
$starGiftAuctionAcquiredGift = $client->starGiftAuctionAcquiredGift(
	name_hidden : true,
	peer : $client->peerUser(
		user_id : -1743942508982365493,
	),
	date : 31,
	bid_amount : -7094288977814776303,
	round : 45,
	pos : 25,
	message : $client->textWithEntities(
		text : 'j0LWFSMJopGnZzuy',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 50,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 24,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 91,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 2,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 41,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 7,
				language : '3yWCn27E4r1hXj0F',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 66,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : -6938284140457410386,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 32,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 90,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 50,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 35,
				document_id : 8891316207746518583,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 35,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 3,
				date : 67,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 94,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 12,
				old_text : 'F2JVOKUrwYe9a1T3',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 100,
			),
		),
	),
	gift_num : 51,
);
```