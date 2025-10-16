# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 216

```tl
stories.storyViews#de9eed1d views:Vector<StoryViews> users:Vector<User> = stories.StoryViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>views</mark> | [`Vector<StoryViews>`](type/StoryViews) | View date and reaction information of multiple stories |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.StoryViews](type/stories.StoryViews)

---

## Example

```php
$storiesStoryViews = $client->stories->storyViews(
	views : array(
		$client->storyViews(
			has_viewers : true,
			views_count : 3,
			forwards_count : 65,
			reactions : array(
				$client->reactionCount(
					chosen_order : 15,
					reaction : $client->reactionEmpty(...),
					count : 95,
				),
			),
			reactions_count : 96,
			recent_viewers : array(-5856881646264872581),
		),
	),
	users : array(
		$client->userEmpty(
			id : 2844626217170336119,
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
			id : 663346719884229472,
			access_hash : 5757389630953920256,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 75,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'APCcxLEmqTYJoeMD',
					reason : 'xrE5R4zyewBiLS6q',
					text : 'IodtEqgTYU1wcW5B',
				),
			),
			bot_inline_placeholder : 'FDy2pAsdlovfYIqn',
			lang_code : 'BTcwNO6j49iqetFn',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 22,
			color : $client->peerColor(
				color : 89,
				background_emoji_id : -474659167566119239,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 3283742725122417230,
			),
			bot_active_users : 26,
			bot_verification_icon : -1381486054457180695,
			send_paid_messages_stars : 4921230497010310725,
		),
	),
);
```