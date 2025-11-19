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
	count : 60,
	reactions : array(
		$client->storyReaction(
			peer_id : $client->peerUser(
				user_id : -8217334424355236208,
			),
			date : 62,
			reaction : $client->reactionEmpty(),
		),
		$client->storyReactionPublicForward(
			message : $client->messageEmpty(
				id : 27,
				peer_id : $client->peerUser(
					user_id : 6233044645564758923,
				),
			),
		),
		$client->storyReactionPublicRepost(
			peer_id : $client->peerUser(
				user_id : -8403472874968673701,
			),
			story : $client->storyItemDeleted(
				id : 2,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6223833316355324157,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 338427462784096041,
			title : 'VcCbQMNqeKlXv8uR',
			photo : $client->chatPhotoEmpty(),
			participants_count : 28,
			date : 92,
			version : 36,
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
				until_date : 12,
			),
		),
		$client->chatForbidden(
			id : 7972400848422313045,
			title : 'aup3fDrkcAjK67qV',
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
			id : -6511183138171593738,
			access_hash : 4863060152080698304,
			title : 'CVsHiRl1Z3QNM0rp',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ngfKLY9aPhvjmuzk',
					reason : '5sIJv7reXfdqkB8j',
					text : 'yLHuaq3pZGx9C8lb',
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
				until_date : 42,
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
				until_date : 81,
			),
			participants_count : 81,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 84,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : 6176732139982592077,
			),
			profile_color : $client->peerColor(
				color : 61,
				background_emoji_id : -2573328870293471002,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 61,
			subscription_until_date : 39,
			bot_verification_icon : 6926317465160490206,
			send_paid_messages_stars : -3920383437432708533,
			linked_monoforum_id : -3704941584669454814,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8832328425506295564,
			access_hash : -9067999525991989959,
			title : 'uSeFJTsjCUIxOm3W',
			until_date : 59,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6547080286636993282,
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
			id : -4001867835536131320,
			access_hash : 5450447543601182666,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 63,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'R6IxfW9qUhZntMam',
					reason : 'u2YU1Pt06rk3G7Vf',
					text : 'fju9GdNQInDxl2Vy',
				),
			),
			bot_inline_placeholder : 'cB7TikUhZMmrg0Cv',
			lang_code : 'pGkIs28zWy0tmvTS',
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
				max_id : 26,
			),
			color : $client->peerColor(
				color : 92,
				background_emoji_id : -6034310195436403430,
			),
			profile_color : $client->peerColor(
				color : 71,
				background_emoji_id : -2964296312815696759,
			),
			bot_active_users : 82,
			bot_verification_icon : 8067270570174746199,
			send_paid_messages_stars : 1602825305034718667,
		),
	),
	next_offset : 'apLJ9dOrG2eNKYFZ',
);
```