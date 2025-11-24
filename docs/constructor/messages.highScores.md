# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 218

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
			pos : 33,
			user_id : 4064161044172640870,
			score : 46,
		),
	),
	users : array(
		$client->userEmpty(
			id : -52988694332970334,
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
			id : -6729957721636708656,
			access_hash : -8421431013679099855,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 52,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'tNX2k0IaEcTlCrJD',
					reason : 'mwE6U2VNuxRypje8',
					text : 'q6ozWYIkS5aGreRJ',
				),
			),
			bot_inline_placeholder : 'w5qfQdElLtYhmHkA',
			lang_code : 'pm5tv6sw7Mdq2Wg9',
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
				max_id : 77,
			),
			color : $client->peerColor(
				color : 84,
				background_emoji_id : 2746567030610929601,
			),
			profile_color : $client->peerColor(
				color : 14,
				background_emoji_id : -1864776380829513926,
			),
			bot_active_users : 62,
			bot_verification_icon : 2300684823403633479,
			send_paid_messages_stars : -1496683046175516161,
		),
	),
);
```