# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 216

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
			pos : 26,
			user_id : -5246170568789446557,
			score : 98,
		),
	),
	users : array(
		$client->userEmpty(
			id : 5214511281985239870,
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
			id : -7556854109476524952,
			access_hash : -4444926181323020245,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 15,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'w8fHjO5cFxVkB9PT',
					reason : 'EWzdKAOhISrqixUM',
					text : 'NOpvbQyDMR5nfhsx',
				),
			),
			bot_inline_placeholder : 'xMCLpNQ8rkP231Au',
			lang_code : 'z7mDNVkiIuvhnPwO',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 70,
			color : $client->peerColor(
				color : 36,
				background_emoji_id : -7400913017293573210,
			),
			profile_color : $client->peerColor(
				color : 64,
				background_emoji_id : -937355315565603565,
			),
			bot_active_users : 74,
			bot_verification_icon : 7810027838099227290,
			send_paid_messages_stars : -1966287931522316676,
		),
	),
);
```