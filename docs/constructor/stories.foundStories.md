# stories.foundStories

**Description** : *Stories found using global story search &raquo;*

**Layer** : 227

```tl
stories.foundStories#e2de7737 flags:# count:int stories:Vector<FoundStory> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results found for the query |
| <mark>stories</mark> | [`Vector<FoundStory>`](type/FoundStory) | Matching stories |
| **next_offset** | [`flags.0?string`](type/string) | Offset used to fetch the next page, if not set this is the final page |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.FoundStories](type/stories.FoundStories)

---

## Example

```php
$storiesFoundStories = $client->stories->foundStories(
	count : 51,
	stories : array(
		$client->foundStory(
			peer : $client->peerUser(
				user_id : 7672399296950654107,
			),
			story : $client->storyItemDeleted(
				id : 0,
			),
		),
	),
	next_offset : 'Y4rWxaGcJgZRQuzO',
	chats : array(
		$client->chatEmpty(
			id : -5265140926611721484,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 1854098716468627584,
			title : 'QcS6w0BrT2VvMZhE',
			photo : $client->chatPhotoEmpty(),
			participants_count : 9,
			date : 72,
			version : 81,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 83,
			),
		),
		$client->chatForbidden(
			id : -6376903779555805704,
			title : 'nrj6FsXTPebHolvM',
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
			id : -704257366791582267,
			access_hash : -5320503926968714381,
			title : 'hNayzQWFu4btwDXA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Yl7SOExUf6dbPnXm',
					reason : '35bmFhjyB4YqiOKN',
					text : 'w3hJst5UQDxYKVAp',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 6,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 83,
			),
			participants_count : 2,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 5,
			),
			color : $client->peerColor(
				color : 22,
				background_emoji_id : -6979224395095441765,
			),
			profile_color : $client->peerColor(
				color : 8,
				background_emoji_id : -9046647829050314765,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 56,
			subscription_until_date : 43,
			bot_verification_icon : 2056087380525920076,
			send_paid_messages_stars : -8834650509461363353,
			linked_monoforum_id : -2376694943677597183,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : 8304759719563844031,
			access_hash : 2047529536281082842,
			title : 'ERip2u0I43vrzJdc',
			until_date : 6,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4420638714165159464,
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
			id : 3487196652664252522,
			access_hash : -5137926226293743923,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 78,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'MmA5fuILSnFpaBWg',
					reason : 'ZpgILNAis0EftPYG',
					text : 'ZR8kB0P3nvdo6T1a',
				),
			),
			bot_inline_placeholder : 'IU9Wn0q4f5vzOjoC',
			lang_code : 'vDzL2JY5E7cwo4uW',
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
				max_id : 99,
			),
			color : $client->peerColor(
				color : 19,
				background_emoji_id : -3154162329261586924,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : 2039697384714141386,
			),
			bot_active_users : 39,
			bot_verification_icon : -1487000002455524904,
			send_paid_messages_stars : -418333041244066441,
		),
	),
);
```