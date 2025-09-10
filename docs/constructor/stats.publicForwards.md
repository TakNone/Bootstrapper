# stats.publicForwards

**Description** : *Contains info about the forwards of a story as a message to public chats and reposts by public channels*

**Layer** : 214

```tl
stats.publicForwards#93037e20 flags:# count:int forwards:Vector<PublicForward> next_offset:flags.0?string chats:Vector<Chat> users:Vector<User> = stats.PublicForwards;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of results |
| <mark>forwards</mark> | [`Vector<PublicForward>`](type/PublicForward) | Info about the forwards of a story |
| **next_offset** | [`flags.0?string`](type/string) | Offset used for pagination |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stats.PublicForwards](type/stats.PublicForwards)

---

## Example

```php
$statsPublicForwards = $client->stats->publicForwards(
	count : 65,
	forwards : array(
		$client->publicForwardMessage(
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(...),
			),
		),
		$client->publicForwardStory(
			peer : $client->peerUser(
				user_id : -8492738470430771569,
			),
			story : $client->storyItemDeleted(
				id : 95,
			),
		),
	),
	next_offset : '0IgYrw7HybJEo4ft',
	chats : array(
		$client->chatEmpty(
			id : -4751666926107070421,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6674207525485993633,
			title : 'rBov4UFg9VuYLewC',
			photo : $client->chatPhotoEmpty(),
			participants_count : 54,
			date : 72,
			version : 84,
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
				until_date : 6,
			),
		),
		$client->chatForbidden(
			id : -1480823786974057770,
			title : '8TBW1HYyg9FR6Lx0',
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
			id : 5320485084496945181,
			access_hash : -7342426193972777488,
			title : 'ifRHekMpzlQDrUqW',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dKszmOYlEgHiQJ12',
					reason : 'xNs6qKVph9dECO40',
					text : 'uUfPrW8gJcM0Bd5a',
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
				until_date : 52,
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
				until_date : 71,
			),
			participants_count : 15,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 78,
			color : $client->peerColor(
				color : 74,
				background_emoji_id : -3795173138862726464,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : 3386576790969256504,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 6,
			subscription_until_date : 43,
			bot_verification_icon : 5842520986030334772,
			send_paid_messages_stars : -5389366238644849328,
			linked_monoforum_id : 6985868666725096857,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7123737882976770553,
			access_hash : 1089111412856644585,
			title : 'bGY9e36hRESvTs8X',
			until_date : 100,
		),
	),
	users : array(
		$client->userEmpty(
			id : -9194015669741254965,
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
			id : -8205474712226795919,
			access_hash : 6214163465789738274,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 40,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'rsjUeTBX934v0u1b',
					reason : 'bEu1gJfkiy2Ndt8v',
					text : 'G1cqOsfdlUCemKY3',
				),
			),
			bot_inline_placeholder : '96SMiTkxGZzp35BE',
			lang_code : 'tclka38KEHefOuCq',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 99,
			color : $client->peerColor(
				color : 2,
				background_emoji_id : -51801415743411895,
			),
			profile_color : $client->peerColor(
				color : 91,
				background_emoji_id : -1660964014795167895,
			),
			bot_active_users : 71,
			bot_verification_icon : 1259739782577552911,
			send_paid_messages_stars : 5441052783781371129,
		),
	),
);
```