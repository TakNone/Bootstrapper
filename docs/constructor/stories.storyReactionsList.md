# stories.storyReactionsList

**Description** : *List of peers that reacted to or intercated with a specific story*

**Layer** : 218

```tl
stories.storyReactionsList#aa5f789c flags:# count:int reactions:Vector<StoryReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of reactions matching query |
| <mark>reactions</mark> | [`Vector<StoryReaction>`](type/StoryReaction) | List of peers that reacted to or interacted with a specific story |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | If set, indicates the next offset to use to load more results by invoking stories.getStoryReactionsList |

---

## Type

[stories.StoryReactionsList](type/stories.StoryReactionsList)

---

## Example

```php
$storiesStoryReactionsList = $client->stories->storyReactionsList(
	count : 14,
	reactions : array(
		$client->storyReaction(
			peer_id : $client->peerUser(
				user_id : -5877230989178760838,
			),
			date : 85,
			reaction : $client->reactionEmpty(),
		),
		$client->storyReactionPublicForward(
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : -2529137063598416400,
				),
			),
		),
		$client->storyReactionPublicRepost(
			peer_id : $client->peerUser(
				user_id : -1112299310144404305,
			),
			story : $client->storyItemDeleted(
				id : 50,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 899723843542805016,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -1974107788261343290,
			title : 'Jt8cBvyX3Kk09h1l',
			photo : $client->chatPhotoEmpty(),
			participants_count : 9,
			date : 6,
			version : 87,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 79,
			),
		),
		$client->chatForbidden(
			id : -959231687868743898,
			title : '5fuCyRGJADjW3prH',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -4014932662013406088,
			access_hash : 6174909459553842092,
			title : 'TKQqkVvSHwRr4eI8',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 13,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'BUjghXSAkpt6WmIY',
					reason : '1elCzZ8UynLEDjaA',
					text : 'Z90rD5Y6BVG1Sh3E',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 14,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 69,
			),
			participants_count : 13,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 16,
			),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : -8811332769595369857,
			),
			profile_color : $client->peerColor(
				color : 38,
				background_emoji_id : 7009310160350968955,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 28,
			subscription_until_date : 48,
			bot_verification_icon : 7575887039054564539,
			send_paid_messages_stars : -6461090219190458045,
			linked_monoforum_id : 1465014196286656208,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5890553399598401480,
			access_hash : 8176621254650238156,
			title : 'sn2uLXMrk7v9wWq4',
			until_date : 31,
		),
	),
	users : array(
		$client->userEmpty(
			id : -6127455234745364798,
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
			id : 4274537040615220340,
			access_hash : -5051734409414047112,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '3LXGdKt6lhkg5eAD',
					reason : 'RpzY3leL4GFKMwfr',
					text : 'frjwIK6aS90lz7UL',
				),
			),
			bot_inline_placeholder : 'Mj783KpcqxJ5weAn',
			lang_code : 'xVrX4Kwfj7hk2ZgN',
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
				max_id : 82,
			),
			color : $client->peerColor(
				color : 51,
				background_emoji_id : 57455896485767421,
			),
			profile_color : $client->peerColor(
				color : 18,
				background_emoji_id : -314640006329742442,
			),
			bot_active_users : 84,
			bot_verification_icon : -5772600585953941974,
			send_paid_messages_stars : -2325869751936385572,
		),
	),
	next_offset : 'F15x0iY3ucpDKqBE',
);
```