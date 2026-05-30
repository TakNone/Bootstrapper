# poll

**Description** : *Poll*

**Layer** : 225

```tl
poll#966e2dbf id:long flags:# closed:flags.0?true public_voters:flags.1?true multiple_choice:flags.2?true quiz:flags.3?true open_answers:flags.6?true revoting_disabled:flags.7?true shuffle_answers:flags.8?true hide_results_until_close:flags.9?true creator:flags.10?true subscribers_only:flags.11?true question:TextWithEntities answers:Vector<PollAnswer> close_period:flags.4?int close_date:flags.5?int countries_iso2:flags.12?Vector<string> hash:long = Poll;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | ID of the poll |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **closed** | [`flags.0?true`](type/true) | Whether the poll is closed and doesn't accept any more answers |
| **public_voters** | [`flags.1?true`](type/true) | Whether cast votes are publicly visible to all users (non-anonymous poll) |
| **multiple_choice** | [`flags.2?true`](type/true) | Whether multiple options can be chosen as answer |
| **quiz** | [`flags.3?true`](type/true) | Whether this is a quiz (with wrong and correct answers, results shown in the return type) |
| **open_answers** | [`flags.6?true`](type/true) | NOTHING |
| **revoting_disabled** | [`flags.7?true`](type/true) | NOTHING |
| **shuffle_answers** | [`flags.8?true`](type/true) | NOTHING |
| **hide_results_until_close** | [`flags.9?true`](type/true) | NOTHING |
| **creator** | [`flags.10?true`](type/true) | NOTHING |
| **subscribers_only** | [`flags.11?true`](type/true) | NOTHING |
| <mark>question</mark> | [`TextWithEntities`](type/TextWithEntities) | The question of the poll (only Premium users can use custom emoji entities here) |
| <mark>answers</mark> | [`Vector<PollAnswer>`](type/PollAnswer) | The possible answers (2-poll_answers_max), vote using messages.sendVote |
| **close_period** | [`flags.4?int`](type/int) | Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with close_date |
| **close_date** | [`flags.5?int`](type/int) | Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future; can't be used together with close_period |
| **countries_iso2** | [`flags.12?Vector<string>`](type/string) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Type

[Poll](type/Poll)

---

## Example

```php
$poll = $client->poll(
	id : 8604642112755387889,
	closed : true,
	public_voters : true,
	multiple_choice : true,
	quiz : true,
	open_answers : true,
	revoting_disabled : true,
	shuffle_answers : true,
	hide_results_until_close : true,
	creator : true,
	subscribers_only : true,
	question : $client->textWithEntities(
		text : 'JQom0n3AGrYlRTxO',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 89,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 96,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 28,
				language : 'ULu4SHPcTkEy6Q9x',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 56,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : 1813774366699325557,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 51,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 30,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 52,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 24,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 52,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 22,
				document_id : 1014316839007405396,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 18,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 97,
				date : 24,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 5,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 18,
				old_text : '0SdCGoOvU6XRPxnw',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 40,
			),
		),
	),
	answers : array(
		$client->pollAnswer(
			text : $client->textWithEntities(
				text : 'HvOJWekxsrV1Qymd',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 41,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 100,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 79,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 87,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 13,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 96,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 37,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 39,
						language : 'KTS1HC5BQly7pzXm',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 52,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 87,
						user_id : -9104467597938114014,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 98,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 12,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 93,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 58,
						document_id : 6885181870400934716,
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
						length : 77,
						date : 73,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 90,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 73,
						old_text : 'lgVRQ29DsZKHhnF0',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 3,
					),
				),
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			media : $client->messageMediaEmpty(),
			added_by : $client->peerUser(
				user_id : -8281591045356472177,
			),
			date : 45,
		),
		$client->inputPollAnswer(
			text : $client->textWithEntities(
				text : 'PVK2Yc3p1RO9dJth',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 10,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 45,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 79,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 83,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 84,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 55,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 53,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 27,
						language : 'OPXo2Wl9Nmy3JAk1',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 98,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 30,
						user_id : -2053468900200909029,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 26,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 38,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 14,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 36,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 74,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 70,
						document_id : 772462114921865149,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 76,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 38,
						date : 47,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 82,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 26,
						old_text : 'lBfv4MXs69CSudq8',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 29,
					),
				),
			),
			media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
		),
	),
	close_period : 50,
	close_date : 98,
	countries_iso2 : array('34jRheaDvqKSOTkY'),
	hash : 0,
);
```