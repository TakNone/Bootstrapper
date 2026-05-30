# messages.highScores

**Description** : *Highscores in a game*

**Layer** : 222

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
			pos : 41,
			user_id : 3765054653971896567,
			score : 55,
		),
	),
	users : array(
		$client->userEmpty(
			id : 7499277773060705968,
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
			id : -4193490677453296263,
			access_hash : -7762572920024584697,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 8,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GnmBFUQXaEPox81u',
					reason : '5rJzPRM2pmIU9gNC',
					text : '1lYRo6Q3bmxpcD5t',
				),
			),
			bot_inline_placeholder : '8mrBw7jukgCIUF3a',
			lang_code : 'oGzNPfTlg94UdkQV',
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
				max_id : 38,
			),
			color : $client->peerColor(
				color : 15,
				background_emoji_id : 7604238503912782991,
			),
			profile_color : $client->peerColor(
				color : 75,
				background_emoji_id : -1370598718247813601,
			),
			bot_active_users : 86,
			bot_verification_icon : 4026150857187052595,
			send_paid_messages_stars : 7594046676449662847,
		),
	),
);
```