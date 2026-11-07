# messageMediaPoll

**Description** : *Poll*

**Layer** : 233

```tl
messageMediaPoll#773f4e66 flags:# poll:Poll results:PollResults attached_media:flags.0?MessageMedia = MessageMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>poll</mark> | [`Poll`](type/Poll) | The poll |
| <mark>results</mark> | [`PollResults`](type/PollResults) | The results of the poll |
| **attached_media** | [`flags.0?MessageMedia`](type/MessageMedia) | Optional media attachment displayed alongside the poll |

---

## Type

[MessageMedia](type/MessageMedia)

---

## Example

```php
$messageMedia = $client->messageMediaPoll(
	poll : $client->poll(
		id : 6758122537887005535,
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
			text : '25A0UXfi9rszWjwM',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 18,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 14,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 32,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 71,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 3,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 46,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 30,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 16,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 79,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 93,
					language : 'dG7Si8VbnYam1uct',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 8,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : -4583234734635794832,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 56,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 98,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 79,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 45,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 50,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 77,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 74,
					document_id : -8361191508233045398,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 92,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 51,
					date : 49,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 95,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 91,
					old_text : 'CfzEjbPQv02ixMLA',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 31,
				),
				$client->messageEntityTonAddress(
					offset : 0,
					length : 92,
				),
			),
		),
		answers : array(
			$client->pollAnswer(
				text : $client->textWithEntities(
					text : 'njaBs67IqYFyoJWT',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
						$client->messageEntityTonAddress(...),
					),
				),
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				media : $client->messageMediaEmpty(),
				added_by : $client->peerUser(
					user_id : 8338253839543274803,
				),
				date : 81,
			),
			$client->inputPollAnswer(
				text : $client->textWithEntities(
					text : 'mDGKpcefxHio0F2a',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
						$client->messageEntityTonAddress(...),
					),
				),
				media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
			),
		),
		close_period : 6,
		close_date : 6,
		countries_iso2 : array('3dNQIw8VPvBhSRG2'),
		hash : 0,
	),
	results : $client->pollResults(
		min : true,
		has_unread_votes : true,
		can_view_stats : true,
		results : array(
			$client->pollAnswerVoters(
				chosen : true,
				correct : true,
				option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				voters : 94,
				recent_voters : array(
					$client->peerUser(
						user_id : -8408706599577723787,
					),
					$client->peerChat(
						chat_id : -1795476673239126965,
					),
					$client->peerChannel(
						channel_id : -6793059972379498117,
					),
				),
			),
		),
		total_voters : 12,
		recent_voters : array(
			$client->peerUser(
				user_id : -4853504516955909199,
			),
			$client->peerChat(
				chat_id : -6162510604912303063,
			),
			$client->peerChannel(
				channel_id : 4719284687310396025,
			),
		),
		solution : 'vb75Qw8HPrUs1fWE',
		solution_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 9,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 76,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 60,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 95,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 62,
				language : 'd5U7iwYeCR846qEV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 90,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 60,
				user_id : -6770670427482281355,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 13,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 73,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 64,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 66,
				document_id : 8124023212574436277,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 66,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 71,
				date : 81,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 75,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 46,
				old_text : '8NowJ5GjKQ6MdEAa',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 68,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 83,
			),
		),
		solution_media : $client->messageMediaEmpty(),
	),
	attached_media : $client->messageMediaEmpty(),
);
```