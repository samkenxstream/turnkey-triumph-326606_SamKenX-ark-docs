---
title: Installation - Introduction
---

# Installation Introduction

A guide on how to prepare a fully functional environment.

---

<x-alert type="info">
If you don't have access to a Linux box you can quickly setup one on [DigitalOcean](https://cloud.digitalocean.com) by using this **100$** referral link: [Referral Link](https://m.do.co/c/09d061526b12).
</x-alert>

## Introduction

ARK Core is written in [TypeScript](https://github.com/microsoft/typescript), and it has been using [Lerna](https://github.com/lerna/lerna) to manage the development and publication of its packages and uses [Node.js](https://nodejs.org) as execution environment.

This guide will take you through the basic steps of setting up a development environment. We recommend Linux (\*.deb based) operating system as the default environment. We officially recommend and support **Ubuntu** operating system.

**Please select one of the development setup tutorial you would like to start with:**

<livewire:page-reference path="/docs/core/installation/script" />

<livewire:page-reference path="/docs/core/installation/docker-unix" />

<livewire:page-reference path="/docs/core/installation/docker-windows" />

<x-alert type="info">
These tutorials are for **setting up the development environment** for ARK core. If you are looking to run a core node in production, we provide other tools and resources, such as:

* [ARK Deployer](https://ark.io/deployer) - Create Blockchain in Minutes
* [Core Server Installation Instructions](/docs/core/installation/source) - Server Installation Instructions For Production Node
</x-alert>
