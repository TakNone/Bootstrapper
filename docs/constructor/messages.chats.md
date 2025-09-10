# messages.chats

**Description** : *List of chats with auxiliary data*

**Layer** : 214

```tl
messages.chats#64ff9fd5 chats:Vector<Chat> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats |

---

## Type

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->messages->chats(
	chats : array(
		$client->chatEmpty(
			id : -2982709114118544539,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7912721558302690077,
			title : 'PJL8h3NMGWX4jcOR',
			photo : $client->chatPhotoEmpty(),
			participants_count : 4,
			date : 52,
			version : 41,
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
				until_date : 30,
			),
		),
		$client->chatForbidden(
			id : 1832329602507344985,
			title : 'JmlBE28DCL7kFcqS',
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
			id : -301003923161022456,
			access_hash : -6481978867965339549,
			title : 'R2yGgJ8M5NhfXlC1',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 67,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'h8ZpDTMqKEiNJd2y',
					reason : 'AKYFDM3aLwyuCOtg',
					text : 'DLbmX8Yu9gP62FZ7',
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
				until_date : 29,
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
				until_date : 5,
			),
			participants_count : 68,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 54,
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 2219396806559574434,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : 6893063346663921779,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 15,
			subscription_until_date : 34,
			bot_verification_icon : -1902997444536111989,
			send_paid_messages_stars : -7254932411377645404,
			linked_monoforum_id : 2863240523503457110,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8302098549113894684,
			access_hash : 7717955452767058927,
			title : 'CjeGNqv2uRSgtlDZ',
			until_date : 70,
		),
	),
);
```