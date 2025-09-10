# stories.storyReactionsList

**Description** : *List of peers that reacted to or intercated with a specific story*

**Layer** : 214

```tl
stories.storyReactionsList#aa5f789c flags:# count:int reactions:Vector<StoryReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = stories.StoryReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 16,
	reactions : array(
		$client->storyReaction(
			peer_id : $client->peerUser(
				user_id : 3564717658969046707,
			),
			date : 44,
			reaction : $client->reactionEmpty(),
		),
		$client->storyReactionPublicForward(
			message : $client->messageEmpty(
				id : 96,
				peer_id : $client->peerUser(...),
			),
		),
		$client->storyReactionPublicRepost(
			peer_id : $client->peerUser(
				user_id : -2238829277296284611,
			),
			story : $client->storyItemDeleted(
				id : 4,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 5595006189027174106,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7414922591939010121,
			title : 'PrFYDmiXsGOJlZbQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 18,
			date : 24,
			version : 16,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 94,
			),
		),
		$client->chatForbidden(
			id : -3646226202566130951,
			title : 'JRPAwYlKbCftnLDW',
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
			id : 8188835434255801288,
			access_hash : 5887289082661303911,
			title : 'DrlKFbHc4VadZGqY',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 12,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'o0NhxqEYaWGAnm8Q',
					reason : 'zEjeLpkbRUdVqZW4',
					text : 'MaZkf0FOeWLJj7GI',
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
				until_date : 26,
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
				until_date : 33,
			),
			participants_count : 2,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 39,
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -1327856479492530882,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : -5240743578349114899,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 67,
			subscription_until_date : 87,
			bot_verification_icon : 696716930028217866,
			send_paid_messages_stars : 2260024479068199557,
			linked_monoforum_id : -9110504132266656247,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8548318012451701498,
			access_hash : -6971121325777442727,
			title : '3NCDgoKheSHlQBwi',
			until_date : 72,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7565299921506956657,
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
			id : -6438048915079409570,
			access_hash : 5428144476926920489,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 11,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'L3ENt9YJjx25CPwy',
					reason : 'QMzUnlGA14ScDqsx',
					text : 'sYwSIteLBPKWuxaA',
				),
			),
			bot_inline_placeholder : 'FZrNzcPmxp6X34k2',
			lang_code : 'MtIQBU7Y018FpnTw',
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
				color : 78,
				background_emoji_id : -4427106589696962880,
			),
			profile_color : $client->peerColor(
				color : 78,
				background_emoji_id : -6462860991976134189,
			),
			bot_active_users : 74,
			bot_verification_icon : -7891553285713026210,
			send_paid_messages_stars : 2275845144050925197,
		),
	),
	next_offset : 'YUxGBcdNzaTV4bWP',
);
```