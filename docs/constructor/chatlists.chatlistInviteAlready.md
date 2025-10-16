# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

**Layer** : 216

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter_id</mark> | [`int`](type/int) | ID of the imported folder |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to be imported |
| <mark>already_peers</mark> | [`Vector<Peer>`](type/Peer) | Peers that were already imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInviteAlready(
	filter_id : 19,
	missing_peers : array(
		$client->peerUser(
			user_id : 5204621036197784466,
		),
		$client->peerChat(
			chat_id : -2115858198298363349,
		),
		$client->peerChannel(
			channel_id : -415814849212633199,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : 8701562265771264805,
		),
		$client->peerChat(
			chat_id : 9161972365296692127,
		),
		$client->peerChannel(
			channel_id : -571694309466983969,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7954848094386664600,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4409784908073670017,
			title : 'orVP6QxIHkYSmN8t',
			photo : $client->chatPhotoEmpty(),
			participants_count : 77,
			date : 77,
			version : 39,
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
				until_date : 84,
			),
		),
		$client->chatForbidden(
			id : 676023144922024561,
			title : 'JBCYx05msIlXDL17',
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
			id : 3837982064341234425,
			access_hash : 8760767564996901443,
			title : 'jlyB2fNd0sixWUoE',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'wR0dhMk3pYNUuZBQ',
					reason : 'Pg5O4pYjlhfBwRSy',
					text : 'eEOo4I1jRQMrKT56',
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
				until_date : 80,
			),
			participants_count : 51,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 40,
			color : $client->peerColor(
				color : 51,
				background_emoji_id : 683860335761634939,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -8668582769298287512,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 81,
			subscription_until_date : 68,
			bot_verification_icon : -698917663758899620,
			send_paid_messages_stars : 2984144281688122151,
			linked_monoforum_id : -4930079134094300144,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6695979619837937822,
			access_hash : -887213573682716420,
			title : 'ZO35NHiqg79sxCwS',
			until_date : 34,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1454252833911328734,
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
			id : 7806577259291367599,
			access_hash : 6426488561975421593,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jy5MoiQzamKXAYRB',
					reason : 'fM0D6etyEJZVAh82',
					text : 'mxrGTR0obOUFD5es',
				),
			),
			bot_inline_placeholder : 'oL2GnBDa9Xvjrh7q',
			lang_code : '2ycxUenLJE4SmDWH',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : 3433787583558122293,
			),
			profile_color : $client->peerColor(
				color : 60,
				background_emoji_id : -4645932935001313413,
			),
			bot_active_users : 97,
			bot_verification_icon : -550478146663745094,
			send_paid_messages_stars : 6991001327369064414,
		),
	),
);
```