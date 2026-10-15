# pollAnswer

**Description** : *A possible answer of a poll*

**Layer** : 229

```tl
pollAnswer#4b7d786a flags:# text:TextWithEntities option:bytes media:flags.0?MessageMedia added_by:flags.1?Peer date:flags.1?int = PollAnswer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Textual representation of the answer (only Premium users can use custom emoji entities here) |
| <mark>option</mark> | [`bytes`](type/bytes) | The param that has to be passed to messages.sendVote |
| **media** | [`flags.0?MessageMedia`](type/MessageMedia) | Optional media attachment displayed alongside the answer |
| **added_by** | [`flags.1?Peer`](type/Peer) | The peer who added this answer; only set for answers dynamically added to an open-answer poll, see polls » |
| **date** | [`flags.1?int`](type/int) | When this answer was added; only set for answers dynamically added to an open-answer poll |

---

## Type

[PollAnswer](type/PollAnswer)

---

## Example

```php
$pollAnswer = $client->pollAnswer(
	text : $client->textWithEntities(
		text : 'FLh1YuWpokrj3GIq',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 11,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 53,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 30,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 14,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 94,
				language : 'yO6FlxdZ73JkUDXz',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 48,
				user_id : -3043371865939833301,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 93,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 41,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 35,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 19,
				document_id : 4583499808644380926,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 51,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 24,
				date : 73,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 46,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 85,
				old_text : '9hPLmR8u6kCBYNwb',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 65,
			),
		),
	),
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	media : $client->messageMediaEmpty(),
	added_by : $client->peerUser(
		user_id : -8151360164932575967,
	),
	date : 9,
);
```