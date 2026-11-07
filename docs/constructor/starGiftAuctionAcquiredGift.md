# starGiftAuctionAcquiredGift

**Description** : *Describes a gift that the current user won in an auction*

**Layer** : 233

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
		user_id : -6147954942046124155,
	),
	date : 26,
	bid_amount : 3229807022133892821,
	round : 11,
	pos : 13,
	message : $client->textWithEntities(
		text : 'XyPBqUaKtGITcvbz',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 62,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 20,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 9,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 32,
				language : 'LVGJ47NspO81REbm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 38,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : 3516571754679344071,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 70,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 98,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 90,
				document_id : 6511006578761015137,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 3,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 40,
				date : 7,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 12,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 8,
				old_text : 'OI9QBnKZpN6XkCYW',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 68,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 6,
			),
		),
	),
	gift_num : 50,
);
```