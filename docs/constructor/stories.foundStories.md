# stories.foundStories

**Description** : *Stories found using global story search &raquo;*

**Layer** : 216

```tl
stories.foundStories#e2de7737 flags:# count:int stories:Vector<FoundStory> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stories.FoundStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	count : 31,
	stories : array(
		$client->foundStory(
			peer : $client->peerUser(
				user_id : 4972808314255296960,
			),
			story : $client->storyItemDeleted(
				id : 80,
			),
		),
	),
	next_offset : 'jr259IRL1BlivXMu',
	chats : array(
		$client->chatEmpty(
			id : -3258530857416255541,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 5633757948347811325,
			title : 'QTnPNYSIx790RCrt',
			photo : $client->chatPhotoEmpty(),
			participants_count : 35,
			date : 83,
			version : 45,
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
				until_date : 57,
			),
		),
		$client->chatForbidden(
			id : -1709197771710652572,
			title : 'D0u6Aqht2BF4podS',
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
			id : 2164617100241776770,
			access_hash : -6339852718369188969,
			title : 'epdr6hkgwMyKnWtb',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 77,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jADv3qSGyC7MsdIt',
					reason : 'B7atmEUXFhlqYewn',
					text : 'f2mLteQYnoEPTw8O',
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
				until_date : 72,
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
				until_date : 40,
			),
			participants_count : 57,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 69,
			color : $client->peerColor(
				color : 21,
				background_emoji_id : -583129813164038599,
			),
			profile_color : $client->peerColor(
				color : 90,
				background_emoji_id : 3626014603764467375,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 85,
			subscription_until_date : 53,
			bot_verification_icon : -5395719284518510691,
			send_paid_messages_stars : 6374729738900032170,
			linked_monoforum_id : 210846017472022064,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7595320529110527340,
			access_hash : 1608178756394538389,
			title : 'ht7vapbGZ5TMFszK',
			until_date : 77,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7813169833555619977,
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
			id : 4047827452777649714,
			access_hash : -3195785735416838597,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 87,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'XDlH7rFt6RKZObn5',
					reason : 'GszKhM87NFuxJWPa',
					text : '02ouw745RDcpCbrj',
				),
			),
			bot_inline_placeholder : 'STi1gsRJtUEe7YAW',
			lang_code : 'zO70yeGNVarilDgB',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 17,
			color : $client->peerColor(
				color : 95,
				background_emoji_id : 969200872066508671,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : 6093369498485505828,
			),
			bot_active_users : 34,
			bot_verification_icon : 2390660282043832800,
			send_paid_messages_stars : -8691897036870823871,
		),
	),
);
```