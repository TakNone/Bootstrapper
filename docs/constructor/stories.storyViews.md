# stories.storyViews

**Description** : *Reaction and view counters for a list of stories*

**Layer** : 227

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
			views_count : 88,
			forwards_count : 10,
			reactions : array(
				$client->reactionCount(
					chosen_order : 34,
					reaction : $client->reactionEmpty(),
					count : 14,
				),
			),
			reactions_count : 14,
			recent_viewers : array(-5237813350643319484),
		),
	),
	users : array(
		$client->userEmpty(
			id : -9173325466989200615,
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
			id : 6461337193522375971,
			access_hash : 3685822372933295748,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 70,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FvRNAEDxTpW2iC0z',
					reason : '8ahICAvFfGwdXmjR',
					text : '1Ap4sJHNKLkTVfFS',
				),
			),
			bot_inline_placeholder : 'lPvC8WHR3u6N9wQG',
			lang_code : 'KSRVQTFCHql90U5w',
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
				max_id : 42,
			),
			color : $client->peerColor(
				color : 26,
				background_emoji_id : 214017878081058611,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : -6493600518657268870,
			),
			bot_active_users : 37,
			bot_verification_icon : -8048101184918449690,
			send_paid_messages_stars : 478351066979090527,
		),
	),
);
```