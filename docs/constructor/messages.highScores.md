# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 227

```tl
messages.highScores#9a3bfd99 scores:Vector<HighScore> users:Vector<User> = messages.HighScores;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>scores</mark> | [`Vector<HighScore>`](type/HighScore) | Highscores |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users, associated to the highscores |

---

## Type

[messages.HighScores](type/messages.HighScores)

---

## Example

```php
$messagesHighScores = $client->messages->highScores(
	scores : array(
		$client->highScore(
			pos : 49,
			user_id : 9010635546158179420,
			score : 34,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4076847138338543579,
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
			id : 1045222569712665934,
			access_hash : 2776882132733083045,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'lLgOKb0yC7knGSha',
					reason : 'bHkvoO40X78Mm2ge',
					text : 'YqW0fHFblBiputrE',
				),
			),
			bot_inline_placeholder : '86bOfiw50SyoVjDE',
			lang_code : 'MPqOpB0ndysNV2a5',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 52,
			),
			color : $client->peerColor(
				color : 68,
				background_emoji_id : -6881953251845729969,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : -6678499287865843347,
			),
			bot_active_users : 11,
			bot_verification_icon : 1427088032041051845,
			send_paid_messages_stars : 350721602417904948,
		),
	),
);
```