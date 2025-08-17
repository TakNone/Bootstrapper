# PeerLocated

**Description** : *Geolocated peer*

**Layer** : 211

```tl
peerLocated#ca461b5d peer:Peer expires:int distance:int = PeerLocated;
peerSelfLocated#f8ec284b expires:int = PeerLocated;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**peerLocated**](constructor/peerLocated) | Peer geolocated nearby |
| [**peerSelfLocated**](constructor/peerSelfLocated) | Current peer |