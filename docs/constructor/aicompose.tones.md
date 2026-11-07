# aicompose.tones

**Description** : *The list of saved AI composer tones &raquo; of the current user*

**Layer** : 233

```tl
aicompose.tones#6c9d0efe hash:long tones:Vector<AiComposeTone> users:Vector<User> = aicompose.Tones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash for pagination, for more info click here |
| <mark>tones</mark> | [`Vector<AiComposeTone>`](type/AiComposeTone) | The saved AI composer tones |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users (i.e. the authors of the tones) |

---

## Type

[aicompose.Tones](type/aicompose.Tones)

---

## Example

```php
$aicomposeTones = $client->aicompose->tones(
	hash : 0,
	tones : array(
		$client->aiComposeTone(
			creator : true,
			id : -4639159752076818052,
			access_hash : -5076263667809674774,
			slug : 'UsWn05RiqPIDjvHx',
			title : 'Mx29TbliN4dLfpEv',
			emoji_id : -2468680664166934707,
			prompt : '8FoA3H0n4XMG5gZd',
			installs_count : 53,
			author_id : 8411880072608884881,
			example_english : $client->aiComposeToneExample(
				from : $client->textWithEntities(
					text : 'BuzhSdOerRCsJpHw',
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
				to : $client->textWithEntities(
					text : '8EtcNYorV197nzhK',
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
			),
		),
		$client->aiComposeToneDefault(
			tone : 'MP6w9oUmb2rfDVYH',
			emoji_id : 116721219022036588,
			title : 'UtZ6YHVXQorgJIDf',
		),
	),
	users : array(
		$client->userEmpty(
			id : 5031888047757603592,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			bot_guard : true,
			bot_forum_sidebar : true,
			id : 7769535292867861867,
			access_hash : -6991657805566804823,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 0,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'm7oMQVE1zF5XDqwe',
					reason : 'V5ys3XW4ifxRz0pq',
					text : 'f7q60jghuPd5abKD',
				),
			),
			bot_inline_placeholder : 'aGqbrCIS8OD7QKFN',
			lang_code : 'jMtEHqhg6JDs5A70',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					deletable : true,
					expired : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 19,
			),
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -8215915873984557365,
			),
			profile_color : $client->peerColor(
				color : 83,
				background_emoji_id : -978881111749998968,
			),
			bot_active_users : 34,
			bot_verification_icon : -1534408829227784694,
			send_paid_messages_stars : 7117919741406715377,
			linked_community_id : 979963368259251953,
		),
	),
);
```